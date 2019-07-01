import React from 'react';
import { connect } from 'react-redux';
import UserList from './userlist';

const mapStateToProps = function(store) {
  return {
    users: store.userState.users
  };
}
 console.log ("adsadads");
export default connect(mapStateToProps)(UserList);
