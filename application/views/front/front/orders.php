            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-sm-12 mb10">
                        <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                            <h2 class="breadcrumb_title">My Orders</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_dashboard_review mb40">
                            <div class="property_table">
                                <div class="table-responsive mt0">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">No of Items</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            <?php 
                                            if(count($orders) < 1) { ?>
                                                <th colspan="4" class="text-thm text-center">You have no Orders</th>
                                            <?php }
                                            foreach($orders as $ord) {
                                            ?>
                                                <th scope="row">
                                                <?php echo $ord->order_id;?>
                                                </th>
                                                <td><?php echo $ord->crdate;?></td>
                                                <td>
                                                <?php echo get_count('order_details','order_id',$ord->order_id);?>
                                                </td>
                                                <td>
                                                    <ul class="view_edit_delete_list mb0">
                                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top"
                                                            title="View Items"><a href="<?php echo base_url('user/order/'.$ord->order_id);?>"><span
                                                                    class="flaticon-view"></span></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--<div class="mbp_pagination">
                                    <ul class="page_navigation">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void()" tabindex="-1" aria-disabled="true"> <span
                                                    class="flaticon-left-arrow"></span> Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void()">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript: void()">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void()">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void()">...</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void()">29</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void()"><span class="flaticon-right-arrow"></span></a>
                                        </li>
                                    </ul>
                                </div>-->	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>