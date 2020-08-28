<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>
<?php include template_dir() . "header.php"; ?>


<div class="container">
    <div class="content-wrapper">
        <div class="content-holder">
            <div class="edit" rel="content" field="cashy_content">
                <module type="layouts" template="skin-2"/>
                <!--    <module type="layouts" template="skin-3"/>-->
                <module type="layouts" template="skin-4"/>
                <module type="layouts" template="skin-5"/>
                <module type="layouts" template="skin-6"/>
                <module type="layouts" template="skin-7"/>
                <module type="layouts" template="skin-8"/>
                <module type="layouts" template="skin-9"/>
                <module type="layouts" template="skin-11"/>
                <module type="layouts" template="skin-12"/>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
