<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationRequest;
use App\Http\Requests\SocialRequest;
use App\Models\Communication;
use App\Models\Social;

class SettingsController extends Controller
{
    public function social_show()
    {
        $social = Social::first();

        return view('admin.settings.social_network', compact('social'));

    }

    public function social_update(SocialRequest $request)
    {
        $validate = $request->validated();

        $social = Social::first();

        $social->update($validate);

        return redirect()->route('admin.social_show');
    }

    public function communication_show()
    {
        $communication = Communication::first();

        return view('admin.settings.communications', compact('communication'));
    }

    public function communication_update(CommunicationRequest $request)
    {
        $validate = $request->validated();

        $communication = Communication::first();

        $communication->update($validate);

        return redirect()->route('admin.communication_show');
    }
}
