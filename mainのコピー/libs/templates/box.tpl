/* menupost.tpl PC版 ナビレイアウト試作 */
nav {
            position: fixed;
            width: 100%;
            top: 50px;
            z-index: 10000;
        }

        .nav-item i {
            display: block;
            font-size: 24px;
        }

        .nav-list {
            display: table;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .nav-item {
        display: table-cell;
        /* padding: 2px 0px; */
        }

        .nav-list {
            table-layout: fixed;
            width: 100%;
        }

        .nav-list {
            border-collapse: collapse;
        }

        .nav-item {
        }

        .navline {
            background: gray;
            width: 100%;
            height: 1px;
        }

        .global-nav {
            position: fixed;
            left: 0;
            /* bottom: 0; */
            background: #F5F5F5;
        }

        .nav-item a span {
            display: block;
            font-size: 15px;
            color: black;
            opacity: 1 !important;
        }