<form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
    <div class="form-group col-lg-4">
        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *">
    </div>
    <div class="form-group col-lg-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *">
    </div>
    <div class="form-group col-lg-4">
        <input type="text" class="form-control" id="website" name="website" placeholder="Your Website">
    </div>
    <div class="form-group col-lg-12">
        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type Your Message..."></textarea>
    </div>
    <div class="form-group col-lg-12">
        <button type="submit" value="submit" class="btn update_btn form-control">Send Message</button>
    </div>
</form>