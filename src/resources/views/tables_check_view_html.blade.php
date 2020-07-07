
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tables</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<h1>Tables</h1>
    <div class="container-fluid">
        <div class="row">
            
                


                <!-- table[Start] --><div class="col-md-3"><h2 class="info">items</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>string('name');
</td><td></td></tr><tr><td>3</td><td>integer('category_id')->unsigned();
</td><td></td></tr><tr><td>4</td><td>integer('cost');
</td><td></td></tr><tr><td>5</td><td>integer('price');
</td><td></td></tr><tr><td>6</td><td>integer('stock');
</td><td></td></tr><tr><td>7</td><td>string('description');
</td><td></td></tr><tr><td>8</td><td>string('image');
</td><td></td></tr><tr><td>9</td><td>integer('store_id')->unsigned();
</td><td></td></tr><tr><td>10</td><td>integer('is_addone');
</td><td></td></tr><tr><td>11</td><td>timestamps();
</td><td></td></tr><tr><td>12</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("category_id")<span class="text-danger">->references("id")->on("m_categories");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("store_id")<span class="text-danger">->references("id")->on("m_stores");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">users</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('name');
</td><td></td></tr><tr><td>3</td><td>string('email')->nullable();
</td><td></td></tr><tr><td>4</td><td>string('password');
</td><td></td></tr><tr><td>5</td><td>string('phone');
</td><td></td></tr><tr><td>6</td><td>string('credit_name');
</td><td></td></tr><tr><td>7</td><td>integer('credit_number');
</td><td></td></tr><tr><td>8</td><td>integer('credit_exmonth');
</td><td></td></tr><tr><td>9</td><td>integer('credit_exyear');
</td><td></td></tr><tr><td>10</td><td>integer('credit_cvv');
</td><td></td></tr><tr><td>11</td><td>timestamps();
</td><td></td></tr><tr><td>12</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">orders</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>date('date');
</td><td></td></tr><tr><td>3</td><td>integer('subtotal')->nullable();
</td><td></td></tr><tr><td>4</td><td>integer('tax');
</td><td></td></tr><tr><td>5</td><td>integer('discount');
</td><td></td></tr><tr><td>6</td><td>integer('total');
</td><td></td></tr><tr><td>7</td><td>integer('paid')->unsigned();
</td><td></td></tr><tr><td>8</td><td>integer('payment_type');
</td><td></td></tr><tr><td>9</td><td>integer('status');
</td><td></td></tr><tr><td>10</td><td>dateTime('receive_time');
</td><td></td></tr><tr><td>11</td><td>timestamps();
</td><td></td></tr><tr><td>12</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("id")<span class="text-danger">->references("id")->on("users");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("id")<span class="text-danger">->references("id")->on("m_pick_times");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">order_details</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>integer('order_id')->unsigned();
</td><td></td></tr><tr><td>3</td><td>integer('item_id')->unsigned();
</td><td></td></tr><tr><td>4</td><td>integer('qty');
</td><td></td></tr><tr><td>5</td><td>timestamps();
</td><td></td></tr><tr><td>6</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("order_id")<span class="text-danger">->references("id")->on("orders");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("item_id")<span class="text-danger">->references("id")->on("items");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_categories</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('name');
</td><td></td></tr><tr><td>3</td><td>string('image');
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_stores</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>string('name');</td><td>サミット五反田店</td></tr><tr><td>3</td><td>integer('store_group_id')->unsigned();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("store_group_id")<span class="text-danger">->references("id")->on("m_store_groups");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">usual_menus</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>string('name');
</td><td></td></tr><tr><td>3</td><td>string('image');
</td><td></td></tr><tr><td>4</td><td>integer('user_id')->unsigned();
</td><td></td></tr><tr><td>5</td><td>timestamps();
</td><td></td></tr><tr><td>6</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("user_id")<span class="text-danger">->references("id")->on("users");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">recommend_items</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>string('pop_image');
</td><td></td></tr><tr><td>3</td><td>integer('item_id')->unsigned();
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("item_id")<span class="text-danger">->references("id")->on("items");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">replace_items</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('reason');
</td><td></td></tr><tr><td>3</td><td>integer('product_id1');
</td><td></td></tr><tr><td>4</td><td>integer('product_id2');
</td><td></td></tr><tr><td>5</td><td>timestamps();
</td><td></td></tr><tr><td>6</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">usual_menu_items</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id')->unsigned();
</td><td></td></tr><tr><td>2</td><td>integer('usual_menu_id')->unsigned();
</td><td></td></tr><tr><td>3</td><td>integer('item_id')->unsigned();
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("usual_menu_id")<span class="text-danger">->references("id")->on("usual_menus");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">//$table->foreign("item_id")<span class="text-danger">->references("id")->on("items");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_store_groups</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('name');</td><td>サミット</td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_pick_times</h2><h5>[店舗引き取り時間帯(15分単位) ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>time('time');
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --> </main>
        </div>
    </div>
</body>

</html>
