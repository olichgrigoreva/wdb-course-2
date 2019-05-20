import React from 'react';

let InputData = () => {
  return (
    <form>
      <input className="form-control input-background" type="data" name="calendar" value =""
          max="2099-12-31" min="2019-01-01"/>
    </form>
  );
};
export default InputData;
