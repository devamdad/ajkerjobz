<!-- Publication Section -->
                <article class="hs-content publication-section" id="section5">
                    <span class="sec-icon fa fa-pencil"></span>
                    <div class="hs-inner">
                        <span class="before-title">.05</span>
                        <h2>PUBLICATIONS</h2>
                        <!-- Filter/Sort Menu -->
                        <span class="content-title">PUBLICATIONS LIST</span>
                        <div class="row publication-form">
                            <div class="col-md-6 publication-filter">
                                <div class="card-drop">
                                    <a class='toggle'>
                                        <i class='icon-suitcase'></i>
                                        <span class='label-active'>ALL</span>
                                    </a>
                                    <ul id="filter">
                                        <li class='active'><a data-label="ALL" data-group="all">ALL</a>
                                        </li>
                                        <li><a data-label="JOURNAL PAPERS" data-group="JOURNAL PAPERS">JOURNAL PAPERS</a>
                                        </li>
                                        <li><a data-label="CONFERENCES" data-group="CONFERENCES">CONFERENCES</a>
                                        </li>
                                        <li><a data-label="DEMONSTRATIONS" data-group="DEMONSTRATIONS">DEMONSTRATIONS</a>
                                        </li>
                                        <li><a data-label="THESES" data-group="THESES">THESES</a>
                                        </li>
                                        <li><a data-label="BOOK CHAPTERS" data-group="BOOK CHAPTERS">BOOK CHAPTERS</a>
                                        </li>
                                        <li><a data-label="BOOK" data-group="BOOK">BOOK</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 publication-sort">
                                <div class="sorting-button">
                                    <span>SORTING BY DATE</span>
                                    <button class="desc"><i class="fa fa-sort-numeric-desc"></i>
                                    </button>
                                    <button class="asc"><i class="fa fa-sort-numeric-asc"></i>
                                    </button>
                                </div>


                            </div>
                        </div>
                        <!-- End Filter/Sort Menu -->

                        <!-- publication wrapper -->
                        <div id="mygrid">
                          <?php
                           include 'php/_show-publication.php';
                           ?>
                            <!-- publication item -->


                            <!-- End publication item -->

                        </div>
                        <!-- End Publication Wrapper -->
                    </div>
                    <div class="clear"></div>
                </article>
                <!-- End Publication Section -->
