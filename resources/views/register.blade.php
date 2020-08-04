<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekan 3 | Tugas Harian 2 - Berlatih Web Statis Laravel</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="{{url('welcome')}}" method="post">
        @csrf
        <label for="firstname">First name:</label>
        <br><br>
        <input type="text" id="firstname" name="firstname">
        <br><br>
        <label for="lastname">Last name:</label>
        <br><br>
        <input type="text" id="lastname" name="lastname">
        <br>
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>
        <br><br>
        <label for="nationality">Nationality:</label>
        <br><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="australian">Australian</option>
            <option value="malaysian">Malaysian</option>
            <option value="singaporan">Singaporan</option>
        </select>
        <br>
        <p>Language Spoken:</p>
        <input type="checkbox" id="indonesia" name="indonesia" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english">English</label>
        <br>
        <input type="checkbox" id="other_language" name="other_language" value="other">
        <label for="other_language">Other</label>
        <br><br>
        <label for="bio">Bio:</label>
        <br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
