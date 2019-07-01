import { createStore, combineReducers } from 'redux';

const userReduser = function (state = {}, action) {
console.log ((action));
  if (action.type === 'ADD_USER') {
    var newState = { ...state, user: action.user };
    return newState;
  }
  return state;
}

const noteReduser = function (state = {}, action) {
  return state;
}

const redusers = combineReducers({
  noteState: noteReduser,
  userState: userReduser
});

const store = createStore(redusers);

store.dispatch({
  type: "ADD_USER",
  user: 'Dan'
});
store.dispatch({
  type: "ADD_USER",
  user: 'John'
});

// var userReduser = function (state = [], action) {
//   if (action.type === 'ADD_USER') {
//     var newState = state.concat([action.user]);
//     return newState;
//   }
//   return state;
// }
//
// var store = createStore(userReduser);
// store.dispatch ({
//   type: "ADD_USER",
//   user: {name: 'Dan'}
// });
// store.dispatch ({
//   type: "ADD_USER",
//   user: {name: 'John'}
// });
console.log (store.getState());

export default store;
