@extends('admin_layout.master')

@section('contect')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <br>
                        <br>
                        <h2>Contact Message</h2>

                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">




                        <!-- Div İçerik Başlangıç -->
                        <input type="hidden" {{$say = '1'}}>
<!-- New messages count -->
<p><strong>New Messages: {{ $unreadCount }}</strong></p>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nomber</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

@foreach ($contacts as $contact )
<tr>
                                    <td width="20">{{$say}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>
        {{ \Illuminate\Support\Str::limit($contact->message, 30) }}
        <a href="#" class="read-more" data-id="{{ $contact->id }}" data-message="{{ $contact->message }}">Read More</a>
    </td>  
                                    <td>

                   <a href="{{ route('admin.contact_delete', $contact->id) }}" class="btn btn-danger"
        onclick="confirm('Are You Sure To Delete This Item?')">Delete</a>
</td>
<td>
                                        @if($contact->is_read)
                                            <span class="badge badge-success">Read</span>
                                        @else
                                            <span class="badge badge-warning">Unread</span>
                                        @endif
                                    </td>
                                </tr>
                                <input type="hidden" {{$say++}}>

@endforeach

                            </tbody>
                        </table>
                        <div id="messageModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
                            <p id="fullMessage"></p>
                            <button onclick="document.getElementById('messageModal').style.display='none'" class="btn btn-secondary">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const readMoreButtons = document.querySelectorAll('.read-more');
    const modal = document.getElementById('messageModal');
    const fullMessageElement = document.getElementById('fullMessage');

    readMoreButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const contactId = this.getAttribute('data-id'); // contact id-ni alırıq
            const fullMessage = this.getAttribute('data-message');
            fullMessageElement.innerText = fullMessage;
            modal.style.display = 'block';

            // AJAX ilə 'is_read' statusunu dəyişirik
            fetch("{{ route('admin.mark-as-read', ['id' => '__ID__']) }}".replace('__ID__', contactId), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id: contactId })
            })
            .then(response => response.json())
            .then(data => {
                
                if (data.status === 'success') {
                    // Statusu dəyişmək və DOM-u yeniləmək
                    const readMoreButton = document.querySelector(`.read-more[data-id="${contactId}"]`);
                    if (readMoreButton) {
                        readMoreButton.innerText = 'Read';  // "Read" yazısı ilə düyməni dəyişirik
                        readMoreButton.disabled = true; // Düyməni deaktiv etmək (isteğe bağlı)
                    }
                }
            })
            .catch(error => console.error('Error:', error)); // Hata ilə əlaqəli məlumat
        });
    });

    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});

</script>
<!-- /page content -->
@endsection