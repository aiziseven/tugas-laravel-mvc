<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SanberBook</title>
</head>

<body>

    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form method="POST" action="{{route('welcome')}}">
        @csrf
        <div>
            <label for="fName">First name:</label>
            <br>
            <br>
            <input type="text" id="fName" name="fName">
        </div>
        <br>

        <div>
            <label for="lName">Last name:</label>
            <br>
            <br>
            <input type="text" id="lName" name="lName">
        </div>
        <br>

        <div>
            <label>Gender:</label>
            <br>
            <br>

            <input type="radio" id="rGender1" name="rGender" value="1"> Male
            <br>

            <input type="radio" id="rGender2" name="rGender" value="2"> Female
            <br>

            <input type="radio" id="rGender3" name="rGender" value="3"> Other
        </div>
        <br>

        <div>
            <label for="sNation">Nationality:</label>
            <br>
            <br>

            <select id="sNation" name="sNation">
                <option value="1">Indonesian</option>
                <option value="2">Singaporean</option>
                <option value="3">Malaysian</option>
                <option value="4">Australian</option>
            </select>
        </div>
        <br>

        <div>
            <label>Language Spoken:</label>
            <br>
            <br>

            <input type="checkbox" id="cLang1" name="cLang[]" value="1"> Bahasa Indonesia
            <br>

            <input type="checkbox" id="cLang2" name="cLang[]" value="2"> English
            <br>

            <input type="checkbox" id="cLang3" name="cLang[]" value="3"> Other
        </div>
        <br>

        <div>
            <label for="tBio">Bio:</label>
            <br>
            <br>

            <textarea id="tBio" name="tBio" cols="25" rows="10"></textarea>
        </div>

        <div>
            <button type="submit" id="btnSignUp" name="btnSignUp">Sign Up</button>
        </div>

    </form>

</body>

</html>