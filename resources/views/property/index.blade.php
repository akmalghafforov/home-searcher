<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- import CSS -->
    <link rel="stylesheet" href="//unpkg.com/element-ui/lib/theme-chalk/index.css">
    <style>
        head, body {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
        }

        .el-header {
            background-color: #B3C0D1;
            color: #333;
            line-height: 60px;
        }

        .el-aside {
            color: #333;
        }
    </style>
</head>
<body>
<div id="app">

    <el-menu
            :default-active="'1'"
            class="el-menu-demo"
            mode="horizontal"
            @select="handleSelect"
            background-color="#409EFF"
            text-color="#303133"
            active-text-color="#FFFFFF"
    >
        <el-menu-item index="1">Property Finder</el-menu-item>
    </el-menu>

    <el-container style="border: 1px solid #eee">
        <el-aside width="300px" style="background-color: rgb(238, 241, 246)">

        </el-aside>

        <el-container>
            <el-main>
                <el-table
                        :data="properties"
                        :empty-text="'No property was found'"
                >
                    <el-table-column prop="id" label="ID"></el-table-column>
                    <el-table-column prop="name" label="Name"></el-table-column>
                    <el-table-column prop="price" label="Price"></el-table-column>
                    <el-table-column prop="bedrooms_count" label="Bedrooms"></el-table-column>
                    <el-table-column prop="bathrooms_count" label="Bathrooms"></el-table-column>
                    <el-table-column prop="storeys_count" label="Storeys"></el-table-column>
                    <el-table-column prop="garages_count" label="Garages"></el-table-column>
                    <el-table-column prop="created_at" label="Created At"></el-table-column>
                </el-table>
            </el-main>
        </el-container>
    </el-container>
</div>
</body>

<script src="//unpkg.com/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>