import * as React from 'react';
import { useEffect, useState } from "react";
import { StyleSheet, View, Text, Image, Button, ActivityIndicator } from "react-native";
import UserLocation from "./UserLocation";



const Item = (props) => {
  const { item } = props




  return (

    <View style={styles.item}>
      <Image source={require("../../assets/pharmacy-logo.png")} style={styles.image} />
      <View style={styles.textContainer}>
        <Text style={styles.title}>{item.name}</Text>
        <Text style={styles.address}>{item.address}</Text>
        <Text style={styles.address}>City : {item.ville}</Text>
        <Text style={styles.phone}>{item.phone1}</Text>
        {item.report_count >= 2 ? (
        <View style={styles.badge}>
          <Text style={styles.badgeText}>En permanence</Text>
        </View>) : <Text></Text>}


      </View>
    </View>
  );
}
const styles = StyleSheet.create({

  item: {

    alignItems: 'center',
    flexDirection: 'row',
    paddingVertical: 8,
    paddingHorizontal: 16,
    backgroundColor: "#F1F6F9",

    borderBottomColor: "#394867",
    borderBottomWidth: 3,
    borderRadius: 16,

  },
  badge: {
    backgroundColor: '#153462',
    borderRadius: 10,
    paddingHorizontal: 8,
    paddingVertical: 4,
    alignSelf: 'flex-end',
  },
  badgeText: {
    color: 'white',
    fontWeight: 'bold',
  },
  textContainer: {
    flex: 1,

    justifyContent: 'center',
    marginStart: 20
  },
  title: {
    fontSize: 20,
    color: "green",


  },
  image: {
    width: 55,
    height: 55,
  },
  address: {
    fontSize: 16,
  },
  phone: {
    fontSize: 14,
    color: 'blue',
    textDecorationLine: 'underline',
  },

})
export default Item;