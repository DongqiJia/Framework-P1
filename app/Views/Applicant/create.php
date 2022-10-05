<?php
    $data = $data ?? [];
    require_once APPROOT . "/Views/Includes/header.php";
?>

<form action="<?= URLROOT ?>/applicant/store" method="POST">
<div class="mt-4 ml-4">
    <div>
<label id="full_name">Full name:</label>
<input id="full_name" type="text" name="FirstName" placeholder="Write your firstname">
<input id= "full_name" type="text" name="LastName" placeholder="Write your lastname">
</div>

    <div class="mt-2">
        <label for="JobId">Application for:</label>
        <select id="JobId" name="JobId">
            <option selected disabled>Choose a Job</option>
            <option value="1">Job 1</option>
            <option value="2">Job 2</option>
            <option value="3">Job 3</option>
            <option value="4">Job 4</option>
        </select>
    </div>

    <div class="mt-2">
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="wjda@awdjo.com" >
    </div>
    <div class="mt-2">
        <label for="Phone">Phone</label>
        <input type="tel" name="Phone" id="Phone" placeholder="06 42721816">
    </div>
    <div class="mt-2">
        <label for="BirthDate" >Birthday</label>
        <input type="date" name="BirthDate" id="BirthDate">
    </div>

    <div class="mt-2">
         <label for="address">Address</label>
         <div>
               <input type="text" name="Street" id="address" placeholder="street">
               <input type="number" name="Number" id="address" placeholder="10">
                <input type="text" name="NumberExtension" id="address" placeholder="a">
                <br>
                <input  id="address" name="ZipCode" type="text" placeholder="1234 AN">
                 <input id="address" type="text" name="Place" placeholder="Deil">
                 <br>
                 <input id="address" type="text" name="Province" placeholder="city" >
         </div>
    </div>

    <div class="mt-2 ">
        <button type="submit" name= "submit" value="submit">Submit </button>
    </div>
</div>
</form>