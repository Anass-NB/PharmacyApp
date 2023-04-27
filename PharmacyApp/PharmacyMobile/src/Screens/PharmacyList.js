import { useEffect, useState } from "react";
import { FlatList, StyleSheet, Text, TouchableOpacity, TouchableWithoutFeedback, View } from "react-native";
import Item from "../Components/Item";
import * as Location from 'expo-location';


const PharmarcyList = (props) => {
  const { navigation } = props
  const [pharmacies, setPharmacies] = useState(null);

  //Fetching Data
  const url = 'http://192.168.8.124:8000/api/pharmacies';
  useEffect(() => {
    fetch(url)
      .then((response) => {
        return response.json();
      })
      .then(data => {
        // console.log(data);
        setPharmacies(data.pharmacies);
      })
      .catch(error => console.error(error))

  }, []);




  return (
    <View style={styles.container}>
      <FlatList
        data={pharmacies}
        initialNumToRender={7}
        renderItem={({ item }) =>
          <TouchableOpacity onPress={() => navigation.navigate("Map", item )}>
            <Item name={item.name} address={item.address} phone1={item.phone1}
              latitude={item.latitude} longtiude={item.longtiude}
              />
          </TouchableOpacity>
        }
        keyExtractor={item => item.id}
      />
    </View>
  );
}
const styles = StyleSheet.create({
  container: {
    // backgroundColor: "#03C988",
    flex: 1
  }

})
export default PharmarcyList;