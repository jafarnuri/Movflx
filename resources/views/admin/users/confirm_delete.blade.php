<form action="{{ route('admin.user.confirm_delete', $user->id) }}" method="POST">
    @csrf
    <label for="confirmation_code">Testik Kodu:</label>
    <input type="text" name="confirmation_code" required>
    <button type="submit">Silinməni Təsdiq Et</button>

</form>
