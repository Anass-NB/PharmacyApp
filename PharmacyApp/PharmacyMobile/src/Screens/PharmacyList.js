import { useEffect, useState } from "react";
import { ActivityIndicator, Button, FlatList, StatusBar, StyleSheet, Text, TextInput, TouchableOpacity, TouchableWithoutFeedback, View } from "react-native";
import Item from "../Components/Item";
import axios from "axios";
import UserLocation from "../Components/UserLocation";
import { IP_ADDRESS } from "@env";

const PharmarcyList = (props) => {
  const { navigation } = props
  const [pharmacies, setPharmacies] = useState(null);
  const [searchPharmacies, setSearchPharmacies] = useState(null);
  const [loading, setLoading] = useState(true)
  const [searchText, setSearchText] = useState("")
  const { location, granted } = UserLocation()

  const handleSearch = (query) => {
    setSearchText(query)
    const formattedText = query.toLowerCase()
    if (!formattedText) {
      setSearchPharmacies(pharmacies)
    } else {
      const filteredData = pharmacies.filter((pharmacy) =>
        pharmacy.name.toLowerCase().includes(searchText.toLowerCase())
      );
      setSearchPharmacies(filteredData);
    }
    console.log(query);
  }












  const url = 'http://192.168.8.124:8000/api/pharmacies?page=1';


  const sendRequest = async (long, lat) => {
    const endPoint = `http://${IP_ADDRESS}:8000/api/pharmacies`;
    try {
      console.log(endPoint);
      await fetch(endPoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ longitude: long, latitude: lat })
      })
        .then(response => {
          if (response.ok) {
            response.json().then(data => {
              console.log(data);
              setPharmacies(data.pharmacies)
              setSearchPharmacies(data.pharmacies)
              setLoading(false)
            })
          }

        })
    }
    catch (error) {
      console.error(error);
    }
  }
  useEffect(() => {
    if (location) {
      sendRequest(location.longitude, location.latitude);
    }
  }, [location]);
  // useEffect(() => {
  //   fetch(url)
  //     .then((response) => {
  //       return response.json();
  //     })
  //     .then(data => {
  //       // console.log(data);
  //       setPharmacies(data.pharmacies.data);
  //       setSearchPharmacies(data.pharmacies.data);
  //       setLoading(false)
  //     })
  //     .catch(error => console.error(error))

  // }, []);

  if (granted && !location) {
    return (
   <View>
     <Text>Activate you location</Text> 
    <Button title="Activate Location"  />
   </View>

    )
  }

  return (
    <View style={styles.container}>
      {loading ?
        <ActivityIndicator size={"large"} color={"#03C988"} />
        :
        (<View style={styles.ListContent} >
          <View >
            <TextInput
              style={styles.textInput}
              placeholder="Search"
              clearButtonMode="always"
              autoCapitalize="none"
              autoCorrect={false}
              onChangeText={(query) => handleSearch(query)}
            />
            <Text style={styles.mainTitle}>Les pharmacies proche de vouz </Text>
          </View>
          <FlatList
            data={searchPharmacies}
            initialNumToRender={10}
            maxToRenderPerBatch={10} // render 20 items per batch when scrolling
            windowSize={5} // keep 10 items in memory at a time
            renderItem={({ item }) =>
              <TouchableOpacity onPress={() => navigation.navigate("Map", item)}>
                <Item item={item} />
              </TouchableOpacity>
            }
            keyExtractor={item => item.id.toString()}
            ListEmptyComponent={<Text>No results found</Text>}
            contentContainerStyle={{ flexGrow: 1 }} // add this to make the FlatList fill the available space
          />
        </View>)
      }

    </View>
  );
}
const styles = StyleSheet.create({
  container: {
    // backgroundColor: "#03C988",
    justifyContent: "center",
    flex: 1
  },
  mainTitle: {
    marginHorizontal: 10,
    marginVertical: 10,
    color: "black",
    fontFamily: 'sans-serif-thin',
    fontWeight: 'bold',
    "fontSize": 20,
    textTransform: "uppercase",
    "letterSpacing": 0.15,
    "lineHeight": 24,
    borderBottomColor: "#03C988",
    borderBottomWidth: 1,
    alignSelf: 'flex-start',
    paddingBottom: 10,
    borderRadius: 4,
  },
  textInput: {

    borderColor: "#03C988",
    borderWidth: 2,
    borderRadius: 8,
    paddingHorizontal: 20,
    paddingVertical: 10,
    marginHorizontal: 10,
    marginVertical: 10
  },
  ListContent: {
    // marginTop: StatusBar.currentHeight || 0,
    flex: 1
  }

})
export default PharmarcyList;