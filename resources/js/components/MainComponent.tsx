import React from 'react';
import ReactDOM from 'react-dom';

export class MainComponent extends React.Component {
    render() {
        return (
            <>
                Main component
            </>);
    }
}

if (document.getElementById('main-component')) {
    ReactDOM.render(
        <MainComponent />
    , document.getElementById('main-component'));
}
