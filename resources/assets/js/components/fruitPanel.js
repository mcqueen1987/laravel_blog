import React, { Component } from 'react';
import { FruitForm } from './fruitForm';
import { FruitList } from './fruitList';
import '../../static/css/fruitPanel.css';

export class FruitPanel extends Component {
	render(){
		const {fruits, addFruit, tag} = this.props;
		return (
			<div className="class-panel">
				<FruitForm addFruit={addFruit} tag={tag}/>
				<FruitList fruits={fruits} tag={tag}/>
			</div>
		);
	};
}

