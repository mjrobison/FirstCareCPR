<?php require_once('header.html'); ?>
	<main>
       <div class = "registrationform">
            <p id="note"> If you are attempting to register for OSHA CLASS please visit the external site: LINK.  
            <p id = "note"> Use the calendar below to find an opening in our schedule.  To schedule a class during the workday we need some lead time.
                When you click submit you will be taken to a second site where you can place your $20 non refundable fee.  This fee holds your spot in the classes you select below.  
            </p>
        
            <form action="formmailer.php" method="POST">
                <p><label>Name/Group: </label><input type="text" name="name" placeholder="John Doe" required></p>
                <p><label>Email: </label><input type="email" name="email" required placeholder="john_doe@example.com"></p>
                <p><label>Phone: </label><input type="phone" name="phone" required placeholder="555-555-5555" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$"></p> 
                <p><label>Date: </label> <input type="date" name="date" required></input></p>
                <p><label>Location: </label> <input type="text" name="location"></p>
                <p><label>Class(es) Needed: </label><br /><br />
                    <input type="checkbox" name="class_needed[]" value="CPR" required />CPR<br />
                    <input type="checkbox" name="class_needed[]" value="AED" required />AED<br />
                    <input type="checkbox" name="class_needed[]" value="FirstAidCertification" required />First Aid Certification<br />
                    <input type="checkbox" name="class_needed[]" value="WildernessTraining" required />Wilderness Training<br />
                    
                <button class="submit">Submit Registration</button>
                </form>
                <script>
                    var checkboxes = $("input[type='checkbox']"),
                    submitButt = $("button.submit");

                    checkboxes.click(function() {
                        submitButt.attr("disabled", !checkboxes.is(":checked"));
                    });  
                </script>
            </form>	
        </div>
    </main>
<?php require_once('footer.php'); ?>