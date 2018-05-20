import React, { Component } from 'react';
import '../../static/css/fruitForm.css';
import happyFace     from '../../static/img/happy.png' // if from default exports, we dont need to use brace
import wonderingFace from '../../static/img/wondering.png'
import worryFace     from '../../static/img/worry.png'
import { FormGroup } from 'react-bootstrap';
import { FormControl } from 'react-bootstrap';

export class FruitForm extends Component {
	constructor(props){
		super(props);
	    this.handleChange = this.handleChange.bind(this);
		this.createFruit = this.createFruit.bind(this); //in=>anonimous function will define in every render; usually bnid it in constructor to avoid performance issues;
	    this.state = {
	      value: ''
	    };
	}

	createFruit(e){
		//defaunt action of onSubmit event will not be triggered
		e.preventDefault();
		var fruit = this.input.value;
		if(typeof fruit === 'string' && fruit.length > 0) {
			this.props.addFruit(fruit, this.props.tag);
			// get ref from this.refs.name_of_ref
			this.setState({ value: "" });
		}
	};

	handleChange(e) {
	    this.setState({ value: e.target.value });
	}

	render(){
		// <button type="submit" id="page-wrap" className="btn btn-primary btn-add">Add</button>
		const {addFruit, tag} = this.props;
		let img = "";
		switch(tag){
			case "happy" :
				img = happyFace;
				break;
			case "wondering" :
				img = wonderingFace;
				break;
			case "worry" :
				img = worryFace;
				break;
			default :
				img = happyFace;
		}
		return(
			<form className="form-inline" ref="fruitForm" onSubmit={this.createFruit}>
				<div className="form-group">
  					<img className="img-hint" alt="happy icon mage" src={`${img}`}/>
					<div className="main">
				        <FormGroup  controlId="formBasicText" >
				          <FormControl type="text" className="fruitForm" onChange={this.handleChange} 
					          value={this.state.value} placeholder={`    I am ${tag} that ...`}  
					          inputRef={(ref) => {this.input = ref}}/>
				        </FormGroup>
					</div>
				</div>
			</form>
		)
	}
};
















