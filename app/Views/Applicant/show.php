<?php
    $data = $data ?? [];
    require_once APPROOT . "/Views/Includes/header.php";
?>

<form action="<?= URLROOT ?>/applicant/store" method="POST">
<div class="mt-4 ml-4">
    <div>
<label id="full_name">Full name:</label>
<input id="full_name" type="text" name="FirstName" placeholder="Write your firstname" value="<?= $data['applicant']->FirstName ?>">
<input id= "full_name" type="text" name="LastName" placeholder="Write your lastname" value="<?= $data['applicant']->LastName ?>">
</div>

    <div class="mt-2">
        <label for="JobId">Application for:</label>
        <select id="JobId" name="JobId">
            <option selected disabled>Choose a Job</option>
            <option value="1" <?= $data['applicant']->JobId = 1 ? 'Selected' : '' ?>>Job 1</option>
            <option value="2" <?= $data['applicant']->JobId = 2 ? 'Selected' : '' ?>>Job 2</option>
            <option value="3" <?= $data['applicant']->JobId = 3 ? 'Selected' : '' ?>>Job 3</option>
            <option value="4" <?= $data['applicant']->JobId = 4 ? 'Selected' : '' ?>>Job 4</option>
        </select>
    </div>

    <div class="mt-2">
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="wjda@awdjo.com" value="<?= $data['applicant']->Email?>">
    </div>
    <div class="mt-2">
        <label for="Phone">Phone</label>
        <input type="tel" name="Phone" id="Phone" placeholder="06 42721816" value="<?= $data['applicant']->Phone?>">
    </div>
    <div class="mt-2">
        <label for="BirthDate" >Birthday</label>
        <input type="date" name="BirthDate" id="BirthDate" value="<?= $data['applicant']->BirthDate ?>">
    </div>

    <div class="mt-2">
         <label for="address">Address</label>
         <div>
               <input type="text" name="Street" id="address" placeholder="street" value="<?= $data['applicant']->Street ?>">
               <input type="number" name="Number" id="address" placeholder="10" value="<?= $data['applicant']->Number?>">
                <input type="text" name="NumberExtension" id="address" placeholder="a" value="<?= $data['applicant']->NumberExtension?>">
                <br>
                <input  id="address" name="ZipCode" type="text" placeholder="1234 AN" value="<?= $data['applicant']->ZipCode?>">
                 <input id="address" type="text" name="Place" placeholder="Deil" value="<?= $data['applicant']->Place?>">
                 <br>
                 <input id="address" type="text" name="Province" placeholder="city" value="<?= $data['applicant']->Province ?>">
         </div>
    </div>

    <div class="mt-2 ">
        
        <a href="<?= URLROOT?>/applicant/update/<?= $data['applicant']->Id ?>">
        <button type="submit" name= "submit" value="submit">Submit </button>
        </a>
    </div>
</div>
</form>