<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('cafeDashboard') }}">
                        <span>DIT-Business Center</span></a></div>
                        <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Home <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('cafeDashboard') }}"><i class="ti-home"></i> Dashboard</a></li>
                    </ul>
                </li>

                <li class="label">Features</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Sales Point <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href=""><i class="ti-tag"></i> Make Sales</a></li>                        
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Stock Management<span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('stock-tables.index') }}" ><i class="ti-tag"></i> Add new stock</a></li>
                        <li><a href="{{ route('stock-discharges.index') }}"><i class="ti-tag"></i> Discharge Stock</a></li>                        
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-eye"></i> Settings <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>                        
                        <li><a href="{{ route('res-products.index') }}"> <i class="ti-tag"></i> Add Product</a></li> 
                        <li><a href="{{ route('res-categories.index') }}"> <i class="ti-tag"></i> Add Categories</a></li>   
                        <li><a href="{{ route('res-sections.index') }}"> <i class="ti-tag"></i> Set Sections</a></li>                                                                     
                    </ul>
                </li> 
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Clients <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>                        
                        <li><a href="{{ route('res-products.index') }}"> <i class="ti-tag"></i> Add Customer</a></li> 
                    </ul>
                </li> 
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Reports <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>                        
                        <li><a href=""> <i class="ti-tag"></i> Daily Sales Log</a></li>                        
                        <li><a href=""> <i class="ti-tag"></i> Monthly Reports</a></li> 
                        <li><a href=""> <i class="ti-tag"></i> Stock Levels</a></li>                                             
                    </ul>
                </li>    
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->