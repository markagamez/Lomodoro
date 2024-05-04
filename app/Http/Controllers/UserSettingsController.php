<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSettingsRequest;
use App\Models\UserSettings;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function index()
    {
        return response()->json(UserSettings::with('user')->get());
    }

    public function store(UserSettingsRequest $request)
    {
        $validated = $request->validated();

        $user_settings = $request->user()->userSettings()->create($validated);

        return response()->json(['message' => 'User setting created successfully', 'user_settings' => $user_settings], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, String $id)
    {
        return response()->json(['data' => $this->fetchUserSettings($request, $id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, String $id)
    {
        return $this->show($request, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserSettingsRequest $request, string $id)
    {
        $validated = $request->validated();
        $user_settings = $this->fetchUserSettings($request, $id);

        $user_settings->update($validated);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSettings $userSettings)
    {
        //
    }

    private function fetchUserSettings(Request $request, string $id)
    {
        return $request->user()->userSettings()->findOrFail($id);
    }
}