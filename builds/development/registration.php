<?php require_once('header.html'); ?>
	<main>
       <div class = "registrationform">
            <p id="note"> If you are attempting to register for OSHA CLASS please visit the external site: LINK.  
            <p id = "note"> Use the calendar below to find an opening in our schedule.  To schedule a class during the workday we need some lead time.
                When you click submit you will be taken to a second site where you can place your $20 non refundable fee.  This fee holds your spot in the classes you select below.  
            </p>
        
            <form action="formmailer.php" method="POST">
                <p><label>Name/Group: </label><input type="text" name="name"></p>
                <p><label>Email: </label><input type="text" name="email"></p>
                <p><label>Phone: </label><input type="text" name="phone"></p> 
                <p><label>Date: </label> <input type="date" name="date"></input></p>
                <p><label>Location: </label> <input type="text" name="location"></p>
                <p><label>Class(es) Needed: </label><br />
                    <input type="checkbox" name="class_needed[]" value="CPR" />CPR<br />
                    <input type="checkbox" name="class_needed[]" value="AED" />AED<br />
                    <input type="checkbox" name="class_needed[]" value="FirstAidCertification" />First Aid Certification<br />
                    <input type="checkbox" name="class_needed[]" value="WildernessTraining" />Wilderness Training<br />
                    
                <input type="Submit"></input>
            </form>	
        </div>
    </main>
<?php require_once('footer.php'); ?>