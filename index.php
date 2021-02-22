<?php
include_once 'header.php';
include_once 'array.php';
?>
<div class="main">
<div class="head text-light">
        <h1>Book a City Taxi to your destination in town</h1>
        <p>Choose from a range of categories and prices</p>
    </div>
    <div class="form">
        <p class="">CITY TAXI</p>
        <h4 style="border-top: 1px solid lightgray">Your everyday travel partner</h4>
            
        <form method="POST" id="checkFare">
            <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">PICKUP</label>
                </div>
                <select name="pickupLocation" class="custom-select pick" id="pickupLocation" onchange="showdrop(this)">
                 <option value="">Pick up location</option>
                 <?php
                 foreach($locations as $key => $value){
                   ?><option value="<?=$key?>"><?=$key?></option><?php
                 }
                 ?>
                </select>
              </div>
              <h6 class="pickAlert mb-3"></h6>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">DROP</label>
                </div>
                <select name="dropLocation" class="custom-select drop" id="dropLocation" >
                  <option selected>Drop Location</option>
                  <?php
                 foreach($locations as $key => $value){
                   ?><option value="<?=$key?>"><?=$key?></option><?php
                 }
                 ?>
                </select>
              </div>
              <h6 class="dropAlert mb-3"></h6>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">CAB TYPE</label>
                </div>
                <select name="cabtype" id="cabtype" class="custom-select type"  onchange="">
                <option selected>CAB TYPE</option>
                <?php
                 foreach($cabtype as $key => $value){
                   ?><option value="<?=$key?>"><?=$key?></option><?php
                 }
                 ?>
                </select>
              </div>
              <h6 class="cabAlert mb-3"></h6>
              <div class="input-group mb-3" id="luggageDiv">
              <span class="input-group-text" id="basic-addon1">Luggage</span>
              <input type="number" id="luggage" name="luggage" >
            </div>

              <button name="submit"  type="submit" id="submit" class="modal1">Calculate Fare</button>
        </form>

    </div>


    <div class="modal" tabindex="-1" role="dialog" id="modalshow">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">FARE CALCULATE</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div id="detailsdata"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Book </button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script src="cab1.js"></script>
<?php
include_once 'header.php';
?>
