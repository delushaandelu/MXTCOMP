<div id="order">
<div id="message-details" class="message-details">
      <div class="container">
        <form action="<?php echo base_url();?>application/views/site/email.php" method="post" id="myForm" class="message-form">
          <div class="row">
            <div class="col-sm-6">
                <table>
                    <tr>
                        <td colspan='2'>
                            <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name*" title="Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email*" title="Email"  required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject"  required>
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject"  required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject">
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject">
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject" >
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-sm-6">
                                <button name="submit" class="btn btn-lg full-width" type="submit" id="submit">Submit</button>
                            </div>
                        </td>
                        <td>
                            <div class="col-sm-6">
                                <button name="reset" class="btn btn-lg full-width" type="reset" id="submit">Cancel</button>
                            </div>
                        </td>
                    </tr>
                </table>
              
              
              
            </div>
            
          </div><!-- /.row -->
        </form><!-- /#commentform -->
      </div><!-- /.container -->
    </div><!-- /.message-details -->
</div>
    