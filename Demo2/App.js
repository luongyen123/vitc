
import React, { Component } from 'react';
import {
  SectionList, Text, View
} from 'react-native';



export default class App extends Component {
  render(){
    const sectionData=[
      {title:'D',data:['Devin']},
      {title:'J', data:['Jackson','James','Jillian','Jimy']},

    ];
    return (
        <View>
          <SectionList
            sections={sectionData}
            renderItem={({item}) => <Text>{item}</Text>}
            renderSectionHeader={({section})=><Text>{section.title}</Text>}
            keyExtractor={(item,index)=>index}
            />
        </View>
      );
  }
}
