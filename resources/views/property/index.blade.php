<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="//unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>
<body>

<div id="app">
    <el-menu
            :default-active="'1'"
            class="el-menu-demo"
            mode="horizontal"
            background-color="#409EFF"
            text-color="#303133"
            active-text-color="#FFFFFF"
    >
        <el-menu-item index="1" class="el-menu-item">Property Finder</el-menu-item>
    </el-menu>

    <el-container>

        <el-aside style="overflow: hidden;">

            <el-form
                    :model="searchForm"
                    :rules="searchFormRules"
                    ref="ruleForm"
                    label-width="120px"
                    class="demo-ruleForm"
            >

                <el-form-item label="Name" prop="name">
                    <el-input v-model="searchForm.name"></el-input>
                </el-form-item>

                <el-form-item label="Price" prop="price">

                    <el-slider
                            v-model="searchForm.price"
                            range
                            :max="maxPriceRange"
                            :step="priceRangeStep"
                    ></el-slider>

                </el-form-item>

                <el-form-item label="Bedrooms count" prop="bedroomsCount">
                    <el-checkbox-group v-model="searchForm.bedroomsCount">
                        <el-checkbox label="1" name="type"></el-checkbox>
                        <el-checkbox label="2" name="type"></el-checkbox>
                        <el-checkbox label="3" name="type"></el-checkbox>
                        <el-checkbox label="4" name="type"></el-checkbox>
                        <el-checkbox label="5" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>

                <el-form-item label="Bathrooms count" prop="bathroomsCount">
                    <el-checkbox-group v-model="searchForm.bathroomsCount">
                        <el-checkbox label="1" name="type"></el-checkbox>
                        <el-checkbox label="2" name="type"></el-checkbox>
                        <el-checkbox label="3" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>

                <el-form-item label="Storyes count" prop="storyesCount">
                    <el-checkbox-group v-model="searchForm.storyesCount">
                        <el-checkbox label="1" name="type"></el-checkbox>
                        <el-checkbox label="2" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>

                <el-form-item label="Garages count" prop="garagesCount">
                    <el-checkbox-group v-model="searchForm.garagesCount">
                        <el-checkbox label="1" name="type"></el-checkbox>
                        <el-checkbox label="2" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>

                <el-form-item>
                    <el-button type="primary" @click="search()">Find Property</el-button>
                    <el-button @click="reset()">Reset</el-button>
                </el-form-item>
            </el-form>

        </el-aside>

        <el-container>
            <el-main>
                <el-table
                        v-loading="loading"
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