import React/*, {Component}*/ from 'react';

let NameEditBlock = () => {
  let { name_note, data_note } = this.props;
    return (
      <div>
        <div>
        <span style = { { float: "left" } }>
        { name_note }
        </span>
        <span style = { { float: "right" } }>
        { data_note }
        </span>
        </div>
        <br></br>
        <hr></hr>
      </div>
    );
};
export default NameEditBlock;
