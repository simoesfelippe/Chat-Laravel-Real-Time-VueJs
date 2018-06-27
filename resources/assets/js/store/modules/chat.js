
export default {


	state: {
		messages: [],
		users: [],
	},

	mutations: {
		LOAD_MESSAGES (state, messages) {
			state.messages = messages
		},

		ADD_MESSAGE (state, messages) {
			state.messages.push(messages)
		},

		LOAD_USERS (state, users) {
			state.users = users
		},

		USER_JOING (state, user) {
			state.users.push(user)
		},

		LEAVE_USER (state, user) {
			state.users = state.users.filter(u => {
				return u.id !== user.id
			})
		}

	},

	actions: {

		loadMesages (context) {
			return axios.get('/chat/messages')
				 .then(response => context.commit('LOAD_MESSAGES', response.data))
		},
		storeMessage (context, params) {
			return axios.post('chat/message', params)
						.then(response => context.commit('ADD_MESSAGE', response.data))
						.catch(() => console.log(error))
		},

		

	},

	getters: {
		messages (state) {
			return _.orderBy(state.messages, 'id', 'asc')
		}
	}
}