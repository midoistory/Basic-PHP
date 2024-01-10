<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Midori Harahap</title>
    </head>
    <body>
        <h2>Buat Account Baru</h2>
        <h3>Sign Up Form</h3>
        <form method="post" action="welcome.php">        
        <div>
            <p><label for="firstname">First Name:</label></p>
            <input type="text" name="firstname" /><br>
            <p><label for="lastname">Last Name:</label></p>
            <input type="text" name="lastname" /><br>
        </div>

        <div>
            <p>Gender:</p>
            <lable><input type="radio" value="male" name="gender">Male</lable>
            <br>
            <lable><input type="radio" value="female" name="gender">Female</lable>
        </div>

        <div>
            <p>Nationality:</p>
            <select name="nationality">
                <option value="indonesia">Indonesia</option>
                <option value="Amerika">Amerika</option>
                <option value="Jepang">Jepang</option>
            </select>
        </div>

        <div>
            <p>Language Spoken:</p>
            <lable><input type="checkbox" name="language[]" value="Indonesia">Indonesia</lable>
            <br>
            <lable><input type="checkbox" name="language[]" value="English">English</lable>
            <br>
            <lable><input type="checkbox" name="language[]" value="Jepang">Jerman</lable>
        </div>

        <div>
            <p>Bio:</p>
            <textarea name="bio" rows="5" cols="30" placeholder="Tulis disini.."></textarea>
            <br><br>    
            <button type="submit" value="submit">Sign Up</button>
        </form>
        </div>
    </body>
</html>