<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'name' => 'Full Name',
            'email' => 'Email',
            'password' => 'Password',
        ],
    ],

    'stock_tables' => [
        'name' => 'Stock Tables',
        'index_title' => 'StockTables List',
        'new_title' => 'New Stock table',
        'create_title' => 'Create StockTable',
        'edit_title' => 'Edit StockTable',
        'show_title' => 'Show StockTable',
        'inputs' => [
            'item_name' => 'Item Description',
            'unit' => 'Units',
            'category' => 'Category',
            'buying_price' => 'Buying Price',
            'quantity' => 'Quantity',
            'description' => 'Description',
        ],
    ],

    'res_sales_tables' => [
        'name' => 'Res Sales Tables',
        'index_title' => 'ResSalesTables List',
        'new_title' => 'New Res sales table',
        'create_title' => 'Create ResSalesTable',
        'edit_title' => 'Edit ResSalesTable',
        'show_title' => 'Show ResSalesTable',
        'inputs' => [
            'product_name' => 'Product Name',
            'price' => 'Price',
            'res_product_id' => 'Res Product',
        ],
    ],

    'product_details' => [
        'name' => 'Product Details',
        'index_title' => 'ResProducts List',
        'new_title' => 'New Res product',
        'create_title' => 'Create ResProduct',
        'edit_title' => 'Edit ResProduct',
        'show_title' => 'Show ResProduct',
        'inputs' => [
            'product_name' => 'Product Name',
            'category' => 'Category',
            'res_category_id' => 'Res Category',
        ],
    ],

    'restuarant_sections' => [
        'name' => 'Restuarant Sections',
        'index_title' => 'ResSections List',
        'new_title' => 'New Res section',
        'create_title' => 'Create ResSection',
        'edit_title' => 'Edit ResSection',
        'show_title' => 'Show ResSection',
        'inputs' => [
            'section_name' => 'Section Name',
        ],
    ],

    'stock_discharges' => [
        'name' => 'Stock Discharges',
        'index_title' => 'StockDischarges List',
        'new_title' => 'New Stock discharge',
        'create_title' => 'Create StockDischarge',
        'edit_title' => 'Edit StockDischarge',
        'show_title' => 'Show StockDischarge',
        'inputs' => [
            'quantity_issued' => 'Quantity Issued',
            'section' => 'Section',
            'stock_table_id' => 'Stock Table',
            'res_section_id' => 'Res Section',
            'description' => 'Description',
            'issued_by' => 'Issued By',
        ],
    ],

    'resturant_categories' => [
        'name' => 'Resturant Categories',
        'index_title' => 'ResCategories List',
        'new_title' => 'New Res category',
        'create_title' => 'Create ResCategory',
        'edit_title' => 'Edit ResCategory',
        'show_title' => 'Show ResCategory',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
