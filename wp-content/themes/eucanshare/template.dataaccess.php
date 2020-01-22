<?php
/**
 *  Template Name: Data Access
 */

?>

<?php get_header();?>
    <section id="" class=" page-default single">
	    <div class="item-img cover cover-center primary-image " style="height:100px;background-image:url(<?php echo  the_post_thumbnail_url('large');  ?>)"></div>
            <div class="content-overlap">
                <div style="margin-left:100px; margin-right:50px">
                    <div class="wrapper ">
                        <h2 class="section-title"><?php the_title();?></h2>
                        <p> euCanSHare <strong>Access Manager </strong> will provide support for managing data access credentials. 
                            The access manager should provide a working environment for: </p>
                        <ul>
                            <li> Researchers applying for data access. </li>
                            <li> Data managers responsible for evaluating such applications. For each role, the manager will provide a tailored interface. </li>
                        </ul>

                        <p> Researchers should have access to their applications for data access, follow their state, communicate with the Data Access Committees, 
                            and eventually obtain the access credentials and data.</p>
                        <p> Data managers will manage the received applications, and eventually grant or revoke credentials as desired.</p>
                        <p> euCanSHare Access Manager will implement the necessary infrastructure for automatic granting procedures, and interface with the Smart 
                            Contracts prototype.</p>

                        <div class="container">
                            <div class="access-box">

                                <h3> My data access applications </h3>

                                <p> For a new data access application select desired datasets from the <a href="https://studies.eucanshare.bsc.es/"> Data Catalogue </a> </p>

                                <form name="access" action="https://eucanshare.bsc.es/dataportal">

                                    <input type="hidden" name="page_id" value="1184">

                                    <select name="dataset_id">
                                        <option value="#"> Select dataset... </option>
                                        <option value="EGAD0001000309"> EGAD0001000309 </option>
                                    </select>

                                    <p><input type="submit" class="button-link" value="Enter Access Manager"></p>

                                </form>     
                            </div>   
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
    </section>

<?php get_footer();?>