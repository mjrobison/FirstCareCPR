<?php require_once('header.html'); ?>
	<main>
        <p id="note">Use the calendar below to find an opening in our schedule.  To schedule a class during the workday we need some lead time.
            When you click submit you will be taken to a second site where you can place your $20 non refundable fee.  This fee holds your spot in the classes you select below.  
        </p>
	
    <form action="formmailer.php" method="POST"><br /><br /><br /><br />
        <p>Name/Group:<input type="text" name="name"></p>
        <p>Email<input type="text" name="email"></p>
        <p>Phone:<input type="text" name="phone"></p> 
        <p>Date: <input type="date" name="date"></input></p>
        <p>Location: <input type="text" name="location"></p>
        <p>Class(es) Needed: <br />
            <input type="checkbox" name="class_needed[]" value="CPR" />CPR<br />
            <input type="checkbox" name="class_needed[]" value="AED" />AED<br />
            <input type="checkbox" name="class_needed[]" value="FirstAidCertification" />First Aid Certification<br /></p>
        
        <input type="Submit"></input>
    </form>	
    </main>
   
<?php require_once('footer.html'); ?>