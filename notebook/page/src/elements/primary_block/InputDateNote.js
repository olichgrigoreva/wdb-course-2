import React/*, {Component}*/ from 'react';
import ("../../css/primary_block/InputDateNote.css");

let InputDateNote = () => {
  return (
    <form>
      <input className = "form-control InputDateNote"
      type = "date"
      />
    </form>
  );
};
export default InputDateNote;
