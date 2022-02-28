<!-- Tugas #12 Laravel Intro
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Tugas #12 Laravel Intro</title>
    </head>

    <body>
        <form action="/welcome" method="POST">
            @csrf
            <h1>Buat Account Baru</h1>
            <h3>Sign Up Form</h3>

            <label>First Name:</label>
            <br><br>
            <input type="text" name="firstName">
            <br><br>
            <label>Last Name:</label>
            <br><br>
            <input type="text" name="lastName">
            <br><br>
            <label>Gender:</label>
            <br><br>
            <input type="radio" name="genderMale"> Male
            <br>
            <input type="radio" name="genderFemale"> Female
            <br>
            <input type="radio" name="genderOther"> Other
            <br><br>
            <label>Nationality:</label>
            <br><br>
                <select name="negara">
                    <option value="indonesia"> Indonesia</option>
                    <option value="malaysia"> Malaysia</option>
                    <option value="singapura"> Singapura</option>
                    <option value="brunei"> Brunei</option>
                    <option value="vietnam"> Vietnam</option>
                </select>
            <br><br>
            <label>Language Spoken:</label>
            <br><br>
            <input type="checkbox"> Bahasa Indonesia
            <br>
            <input type="checkbox"> English
            <br>
            <input type="checkbox"> Other
            <br><br>
            <label>Bio:</label>
            <br><br>
            <textarea></textarea>
            <br><br>
            <input type="submit" value="Kirim">
        </form>
    </body>
</html>
-->

@extends('/adminlte/master/master')

@section('title')
    Halaman Form (Bagian dari Tugas #12 Laravel Intro)
@endsection

@section('content')
    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru</h1>
        <h3>Sign Up Form</h3>

        <label>First Name:</label>
        <br><br>
        <input type="text" name="firstName">
        <br><br>
        <label>Last Name:</label>
        <br><br>
        <input type="text" name="lastName">
        <br><br>
        <label>Gender:</label>
        <br><br>
        <input type="radio" name="genderMale"> Male
        <br>
        <input type="radio" name="genderFemale"> Female
        <br>
        <input type="radio" name="genderOther"> Other
        <br><br>
        <label>Nationality:</label>
        <br><br>
            <select name="negara">
                <option value="indonesia"> Indonesia</option>
                <option value="malaysia"> Malaysia</option>
                <option value="singapura"> Singapura</option>
                <option value="brunei"> Brunei</option>
                <option value="vietnam"> Vietnam</option>
            </select>
        <br><br>
        <label>Language Spoken:</label>
        <br><br>
        <input type="checkbox"> Bahasa Indonesia
        <br>
        <input type="checkbox"> English
        <br>
        <input type="checkbox"> Other
        <br><br>
        <label>Bio:</label>
        <br><br>
        <textarea></textarea>
        <br><br>
        <input type="submit" value="Kirim">
    </form>
@endsection