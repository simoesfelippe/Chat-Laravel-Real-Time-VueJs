<template>
	<div>
		<h3>{{ users.length }} online</h3>

		<div class="users">
			<div class="user" v-for="user in users" :key="user.id">
				<div class="user-img">
					<img src="/imgs/no-image.png" alt="">
				</div>
				<strong v-text="user.name"></strong>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		computed:{
			users () {
				return this.$store.state.chat.users;
			}
		}
	}
</script>

<style scoped>
	.users{
		float:left;
		width: 100%;
		overflow-x: hidden;
		overflow-y: auto;
		max-height: 400px;
	}
	.user{
		float:left;
		width: 100%;
		margin:10px 0;
	}
	.user-img{
		float: left;
	}
	.user-img img{
		max-width: 40px;
		border:1px solid #FFF;
		border-radius: 100%;
	}
	.user strong{
		float:left;
		margin:9px 4px;
	}


</style>