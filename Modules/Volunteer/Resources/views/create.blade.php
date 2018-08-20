@extends('volunteer::layouts.master')

@section('content')
<form method="post" class="form">
    <legend>Volunteer Registration</legend>
    <input type='hidden' name='csrfmiddlewaretoken' value='u2U7e7mgJMrHLxvmbxbDsae5LMrRhRcYjwxM2FCv6FUVIe7fLCHSF5oyDvW8WGUm' />
    <div class="form-group">
        <label for="name">Your name: </label>
        <input class="form-control" id="name" type="text" name="name" value="">
    </div>
    <div class="form-group">
        <label for="mobile">Your mobile number: </label>
        <input class="form-control" id="mobile" type="text" name="mobile" value="">
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input class="form-control" id="password" type="password" name="password">
    </div>
    <div class="form-group">
        <label for="district">District: </label>
        <select class="form-control" name="district">
            <option value="tvm">Thiruvananthapuram</option>
            <option value="ptm">Pathanamthitta</option>
            <option value="alp">Alappuzha</option>
            <option value="ktm">Kottayam</option>
            <option value="idk">Idukki</option>
            <option value="mpm">Malappuram</option>
            <option value="koz">Kozhikode</option>
            <option value="wnd">Wayanad</option>
            <option value="knr">Kannur</option>
            <option value="ksr">Kasaragod</option>
            <option value="pkd">Palakkad</option>
            <option value="tcr">Thrissur</option>
            <option value="ekm">Ernakulam</option>
            <option value="kol">Kollam</option>
        </select>
    </div>
    <div class="form-group">
        <label for="panchayath">City: </label>
        <input class="form-control" id="panchayath" type="text" name="panchayath">
    </div>
    <div class="form-group">
        <label for="location">Location: </label>
        <input class="form-control" id="location" type="text" name="location">
    </div>
    <div class="form-group">
        <label for="type">Type: </label>
        <select class="form-control" name="type">
            <option value="it">IT</option>
            <option value="ground">Ground Work</option>
            <option value="manager">Manager</option>
            <option value="hotline">Hotline</option>
        </select>
    </div>
    <div class="form-group">
        <label for="mobile">Area willing to support: </label>
        <input class="form-control" id="area_willing_to_support" type="text" name="area_willing_to_support">
    </div>
    <div class="form-group">
        <label for="mobile">Availability(Day/Night/Hours): </label>
        <input class="form-control" id="availability" type="text" name="availability">
    </div>
    <div class="form-group">
        <label for="type">Service Type: </label>
        <select class="form-control" name="services" id="services">
            <option value='dcr'>Doctor</option>
            <option value='hsv'>Health Services</option>
            <option value='elw'>Electrical Works</option>
            <option value='mew'>Mechanical Work</option>
            <option value='cvw'>Civil Work</option>
            <option value='plw'>Plumbing work</option>
            <option value='vls'>Vehicle Support</option>
            <option value='ckg'>Cooking</option>
            <option value='rlo'>Relief operation</option>
            <option value='cln'>Cleaning</option>
            <option value='oth'>Other</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"> Register as volunteer </button>
</form>
@stop
