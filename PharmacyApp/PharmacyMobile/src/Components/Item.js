import { StyleSheet, View, Text, Image, Button } from "react-native";

const Item = (props) => {
  const { name,address,phone1 } = props
  return (

      <View style={styles.item}>
        <Image source={require("../../assets/pharmacy-logo.png")} style={styles.image} />
        <View style={styles.textContainer}>
          <Text style={styles.title}>{name}</Text>
          <Text style={styles.address}>{address}</Text>
          <Text style={styles.phone}>{phone1}</Text>
       
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
    backgroundColor: "#fefefe",
  
    borderBottomColor: "green",
    borderBottomWidth: 3
    // borderRadius: 26,

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