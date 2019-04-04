<template>
    <div class="container">
        <nav class="navbar navbar-metaphor navbar-metaphor--light navbar-expand-md">
            <a class="navbar-brand" href="#">
                <span class="sr-only">CSUN Logo</span>
                <span class="navbar-brand__subbrand">
                    Classroom Profiles
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup2">
                <div class="navbar-nav text-center">
                    <a class="nav-item nav-link active" href='/'>Home</a>
                    <a class="nav-item nav-link" href='login'>Login</a>
                    <a class="nav-item nav-link" href='logout'>Logout</a>
                </div>
            </div>
        </nav>

        <br/><br/>

        <div class="row">
            <div class="col">
                <h2 class="text-center">All Classes</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="form-group">
                        <select id="list" accesskey="target" ref="selectField" class="form-control">
                            <option v-for="item in equip">{{item.Building_Room}}</option>
                        </select>
                    </div>

                    <br>
                    <button
                            type="button"
                            @click="goToNewPage()"
                            class="btn btn-rounded btn-primary"
                    >View equipment</button>
                </form>
            </div>
        </div>
        <br/>
        <hr class="hr-metaphor">
        <br/>
    </div>
</template>

<script>
</script>