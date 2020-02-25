 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
    <script src="https://cdn.tiny.cloud/1/joswx9brkl30h2i3yg8ojrzkj3depv882rsilys1iuicbnf6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 </head>
 <body>
  <style type="text/css">
    .panel_content
{
    background-color: #eceff7;
}
.clickable{
    cursor: pointer;
}
.panel
{
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 0;
    /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
    /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
}
.product-type
{
    margin-top: 45px;
}
.product-size
{
    margin-top: 25px;
}
.product-use
{
    margin-top: 25px;
    margin-bottom: 25px;
}
.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}
.panel-primary>.panel-heading {
    color: #000;
    background-color: #fff;
    border-bottom: 1px solid #eeeeee;
    padding-top: 20px;
    padding-bottom: 20px;
}
.panel-title
{
    font-size: 22px;
    font-weight:400;
}

.panel_product_type
{
    
    margin-top: 20px;
}
.panel_product_type
{
    line-height: 26px;
}
.panel_product_type
{
    font-size: 18px;
    font-weight: 400;
    color: black;
}
  </style>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="panel_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary product-type">
                        <div class="panel-heading">
                            <h3 class="panel-title">Grommet Type</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                        </div>
                        <div class="panel-body">
                            <ul class="panel_product_type">
                                <li>Ventilation Tubes </li>
                                <li>Armstrong Grommet</li>
                                <li>Bevel Bobbin</li>
                                <li>Paparella</li>
                                <li>Spooner</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary product-size">
                        <div class="panel-heading">
                            <h3 class="panel-title">Grommet Size</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 product-use">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Use Of Grommet</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 </body>
 </html>












<script type="text/javascript">
   $(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
            }
        })



</script>
