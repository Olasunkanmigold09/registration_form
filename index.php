<!DOCTYPE html>
<html>
    <head>
        
    <title>GRACELAND POLYTECHNIC OFFA</title>
    </head>
    <header style="background-color: Orange; height: 50px; size: 80px;padding: 1rem 2rem; color: whitesmoke; font-weight: 800;">
    <h4 style="text-align: center; font-size: 30px; margin: 0; "><img src="assets/gpo2.jpg" alt="logo" align="left" width="80px" height="80px" margin-top="0px" margin-bottom="10px" padding="10px 15px" margin-left="1rem 2rem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRACELAND POLYTECHNIC OFFA</h4>
    </header>
<body>
    
        <hr>
        <div style="max-width:900px; margin:auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px #556b2f;">
            
                
            <form name="form" action="./helpers/insert_helpers.php" method="post">
                <center>
                <img src="assets/gpo1.png" alt="logo" width="60px" height="70px">
                </center>
                <h2 style="text-align: center; font-size: larger;">REGISTRATION FORM</h2>

                <input type="text"  name="ref_no" placeholder="REFERENCE NO:" style="width: 40%; padding: 10px; margin-bottom: 10px;  border: 1px solid #ccc; border-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="file" name="passport"   placeholder="PASSPORT" style="width:30%; border: 1px solid #ccc; align:right; border_radius: 10px;">
                <input type="text" name="reg_no" placeholder="REGISTRATION NUMBER" style="width: 90%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="surname" placeholder="SURNAME" style="width: 90%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="firstname" placeholder="FIRST NAME" style="width: 43%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="middlename" placeholder="MIDDLE NAME" style="width: 44%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="date" name="date_of_birth" placeholder="DATE OF BIRTH" style="width: 30%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="gender" placeholder="GENDER" style="width: 25%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <select type="text" name="marital_status" placeholder="MARITAL STATUS" style="width: 30%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="select">MARITAL STATUS</option>
                <option>SINGLE</option>
                <option>MARRIED</option>
                <option>DIVORCE</option>
                </select>
                <input type="email" name="e_mail" placeholder="E-MAIL" style="width: 50%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="nationality" placeholder="NATIONALITY" style="width: 38%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="number" name="phone_no" placeholder="PHONE NUMBER" style="width: 40%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input maxlength="50" type="text" name="address" placeholder="ADDRESS" style="width: 48%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="state" placeholder="STATE OF ORIGIN" style="width: 40%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="lga" placeholder="LOCAL GOVERNMENT AREA" style="width: 48%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="varchar" name="jamb_yr" placeholder="YEAR OF JAMB" style="width: 30%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="varchar" name="mat_yr" placeholder="YEAR OF MATRICULATION" style="width: 25%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="varchar" name="grad_yr" placeholder="YEAR OF GRADUATION" style="width: 30%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="matric_no" placeholder="MATRICULATION NUMBER" style="width: 30%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="department" placeholder="DEPARTMENTS" style="width: 30%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="religion" placeholder="RELIGION" style="width: 25%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="father_name" placeholder="FATHER MAIDEN NAME" style="width: 90%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="mother_name" placeholder="MOTHER MAIDEN NAME" style="width: 90%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="text" name="par_no" placeholder="PARENT'S OR GUIDIANCE TEL NO" style="width: 90%;  padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <textarea maxlength= "50" type="text" name="par_address" placeholder="ADDRESS(Permanent Home Address)" style="width: 90%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;x; border-radius: 4px;"></textarea>
                
                <button onclick="message()" type="submit" style="margin-top: 10px; padding: 10px 15px; background-color: #556b2f; color: white; border: none; border-radius: 4px; cursor: pointer;">SUBMIT</button>
            </form>
        </div>
        </hr>
    
</body>
<hr>
<footer style="background-color: Orange; color: white; text-align: center; padding: 1.5rem;">
<script>
    function message(){
    msg="popup.html";
    echo(msg);
}
    function message(){
        let msg="Registered Successfully";
        document.getElementById("status").innerText = msg;
}
</script>
    <p>&copy; 2025 BlackolaTech. All rights reserved. | Designed by: Olajide Olasunkanmi.O</p>
</footer>
</html>