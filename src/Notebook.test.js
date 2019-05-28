import React from 'react';
import ReactDOM from 'react-dom';
import Notebook from './Notebook';

it('renders without crashing', () => {
  const div = document.createElement('div');
  ReactDOM.render(<Notebook />, div);
  ReactDOM.unmountComponentAtNode(div);
});
