import React from 'react';
const ItemDetalis = ({ item }) => {
  const { label, date, text } = item;
    return (
      <div className="container">
        <div className="row mb2">
          <div className="col-md-6">
            <span>{ label }</span>
          </div>
            <div className="col-md-6 text-right">
              <span>{ date }</span>
            </div>
        </div>
        <div className="row">
          <div className="col">
              <hr/>
                <div>
                  <span>{ text }</span>
                </div>
          </div>
        </div>
      </div>
    )
  };


export default ItemDetalis;
