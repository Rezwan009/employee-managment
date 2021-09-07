<template>
    <div>
        <div
            class="d-sm-flex align-items-center justify-content-between mb-4"
        >
            <h1 class="h6 mb-0 text-gray-800">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <router-link to="#">Home</router-link>
                        </li>
                        <li class="breadcrumb-item">
                           <router-link to="/employees">Employees</router-link>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Data
                        </li>
                    </ol>
                </nav>
            </h1>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-tools float-right">
                     <router-link to="/employees/create"><i class="fas fa-plus-square"></i>&nbsp;Create New Employee</router-link>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#S.No</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        
                        </tr>

                        <tr>
                            <td>
                                <i class="fas fa-folder-minus"></i> No record
                                found
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<style scoped></style>
<script>
export default {};
</script>
