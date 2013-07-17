<?php $contact = $this->session->userdata('contact');?>
<h2>CONTACTS</h2>
<div class="contacts">    
    <div class="span7">
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" id="name" name="name" placeholder="Name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company">Company</label>
                <div class="controls">
                    <input type="text" id="company" name="company" placeholder="Company">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="phone">Phone</label>
                <div class="controls">
                    <input type="text" id="phone" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="contents">Content</label>
                <div class="controls">
                    <textarea placeholder="Content" id="contents" name="contents"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">                    
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="span5">
        <p>
            <?php echo $contact['contact_'.LANG]?>
        </p>
    </div>
</div>