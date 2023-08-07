<?php include "forms/register.php"; ?>
<form id="register_user" method="post" action="" onsubmit="return validateRegister();">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="registerName" class="form-control" name="registerName" required />
    <label class="form-label" for="registerName">Organisation Name</label>
  </div>

  <!-- Username input as of now it is not needed -->
  <!-- <div class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div> -->

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="registerEmail" name="registerEmail" class="form-control" required />
    <label class="form-label" for="registerEmail">Email Id</label>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="tel" class="form-control" name="contactNo" id="contactNo" pattern="[0-9]+" required>
    <!-- <input type="number" id="contactNo" name="contactNo" class="form-control" required="required" min="0" /> -->
    <label class="form-label" for="contactNo">Contact No</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="registerPassword" name="registerPassword" class="form-control" required />
    <label class="form-label" for="registerPassword">Password</label>
  </div>

  <!-- Repeat Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="registerRepeatPassword" name="registerRepeatPassword" class="form-control" />
    <label class="form-label" for="registerRepeatPassword">Confirm Password</label>
  </div>

  <!-- Checkbox -->
  <!-- currently this protion is not needed -->
  <!-- <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
    <label class="form-check-label" for="registerCheck">
      I have read and agree to the terms
    </label>
  </div> -->

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-3" name="register" id="register">Register</button>
</form>