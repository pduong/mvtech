<?php $contact = $this->session->userdata('contact');?>
<h2>CONTACTS</h2>
<div class="contacts">    
    <div class="span7">
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Name</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Company</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Company">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Phone</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Phone">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Content</label>
                <div class="controls">
                    <textarea placeholder="Content"></textarea>
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