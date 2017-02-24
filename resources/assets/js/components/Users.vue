<template>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Photo</th>
							<th>Name</th>
							<th>Email</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="user in users">
							<td>
								<img :src="user.photo? user.photo:'/images/default-profile.png'">
							</td>
							<td>{{ user.name }}</td>
							<td>{{ user.email }}</td>
							<td>
								<button type="button" class="btn btn-default">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>					
		</div>	
	</div>
</template>

<script>
export default {

  name: 'Users',

  data () {
    return {
    	users: [],
    };
  },
  created() {
  	this.fetchUsers();
  },
  methods: {
  		fetchUsers() {
  			this.$http.get('api/users').then(response => {
  				this.users = response.data.users;
  			})
  		}
  }
};
</script>

<style lang="css" scoped>
</style>