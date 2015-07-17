<?php
/**
 * Template Name: Schedule Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<!-- main content -->

<div class="contentpart">
  <div class="container">
    <div class="col-md-9 col-xs-12">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <div class="contenttext">
        <h3>
          <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>
        <div id="form-wrapper" class="col-md-10">
	        <form id="contact" class="form-horizontal">
		        <div class="row">
			        <div class="form-group">
				        <label class="col-sm-2 control-label">First Name*</label>
				        <div class="col-sm-4">
				        	<input name="fname" id="fname" class="form-control" type="text" placeholder="First Name" />
				        </div>
				        <label class="col-sm-2 control-label">Last Name</label>
				        <div class="col-sm-4">
				        	<input name="lname" id="lname" class="form-control" type="text" placeholder="Last Name" />
				        </div>
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group">
				        <label class="col-sm-2 control-label">Email*</label>
				        <div class="col-sm-10">
				        	<input name="email" id="email" class="form-control" type="email" placeholder="Email" />
				        </div>
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group">
				        <label class="col-sm-2 control-label">Address</label>
				        <div class="col-sm-10">
					        <input type="text" id="address" class="form-control" name="address" placeholder="Street Address" /><br />
					        <input type="text" id="address_2" class="form-control" name="address_2" placeholder="Address Line 2" /><br />

					        <input type="text" id="city" class="form-control" name="city" placeholder="City" /><br />

					        <input type="text" id="zip" class="form-control" name="zip" placeholder="Zip" />
				        </div>
			        </div>
		        </div>
		        <div class="row">
			        <div class="form-group col-sm-4">
				        <label class="col-sm-3 control-label">Date</label>
				        <div class="col-sm-9">
				        	<input type="text" id="datepicker" class="form-control" class="date" name="date" />
				        </div>
			        </div>
			        <div class="col-sm-8">
				        <label class="col-sm-2 control-label">Time</label>
				        <div class="col-sm-10 row ">   
					        <div class="col-sm-3">
						        <input type="text" id="hour" class="time form-control" name="time" />
					        </div>
					        <div class="col-sm-1">
						        <p>:</p>
					        </div>
					        <div class="col-sm-3">
						        <input type="text" id="minutes" class="time form-control" name="time" />
					        </div>
					        <div class="col-sm-4">
								<select class="form-control"><option>AM</option><option>PM</option></select>
					        </div>
				        </div>
				    </div>
		        </div>
		        <div class="form-group">
			        <label>Preferred Date Option 2</label>
			        <input type="text" id="datepicker" class="date form-control" name="date" />
		        </div>
		        <div class="form-inline">
			       <div class="form-group">
				        <label>Preferred Time Option 2</label>
				        <input type="text" id="hour" class="time form-control" name="time" />
			        </div>
			        <div class="form-group">
				        <label> : </label>
				        <input type="text" id="minutes" class="time form-control" name="time" />
			        </div>
			        <div class="form-group">
				        <select class="form-control"><option>AM</option><option>PM</option></select>
			        </div>
			        </div>
		        </form>		        <div class="form-group">
			        <label>Business Type</label>
				        <select class="form-control">
					        <option>Residential</option>
					        <opiton>Commercial</opiton>
					        <option>Refrigeration</option>
				        </select>
		        </div>
		        <div class="form-group">
		        <label>Service Type</label>
			        <select class="form-control" >
				        <option>Repair</option>
				        <option>Maintenance</option>
				        <option>Replacement</option>
				        <option>Health Issue</option>
				        <option>Refrigeration</option>
				        <option>Other</option>
			        </select>
		        </div>
		        <textarea cols="5" rows="5" placeholder="Please provide additional information here:" class="form-control" ></textarea>
		        <input type="submit" name="submit" id="submit" />
		        
	        </form>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3 col-xs-12">
      <div class="rightsidebar">
        <?php dynamic_sidebar('rightside'); ?>
      </div>
    </div>
  </div>
</div>

<!-- main content -->

<?php get_footer(); ?>
