<div id="order">
<div id="message-details" class="message-details">
      <div class="container">
        <?php echo validation_errors();?>
        <?php echo form_open('pages/order');?>
          <div class="row">
            <div class="col-sm-6">
                <table>
                    <tr>
                        <td colspan='2'>
                            <input id="author" class="form-control" name="name" type="text" value="" size="30" aria-required="true" placeholder="Name*" title="Name">
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <input id="email" class="form-control" name="email" type="text" value="" size="30" aria-required="true" placeholder="Telephone Number*" title="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="itemi" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject">
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="qtyi" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="itemii" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject">
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="qtyii" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="itemiii" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject">
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="qtyiii" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="subject" class="form-control" name="itemiv" type="subject" value="" size="30" aria-required="true" placeholder="Item*" title="Subject" >
                        </td>
                        <td>
                            <input id="subject" class="form-control" name="qtyiv" type="subject" value="" size="30" aria-required="true" placeholder="Kg / g*" title="Subject" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input id="subject" class="form-control" name="address" type="subject" value="" size="30" aria-required="true" placeholder="Delivery Address" title="Subject">
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
                                <a href="<?php echo base_url();?>"><button name="reset" class="btn btn-lg full-width" id="submit">Cancel</button></a>
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
    