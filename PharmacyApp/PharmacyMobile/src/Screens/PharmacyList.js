import { useEffect, useState } from "react";
import { ActivityIndicator, Button, FlatList, StatusBar, StyleSheet, Text, TextInput, TouchableOpacity, TouchableWithoutFeedback, View } from "react-native";
import Item from "../Components/Item";
import filter from "lodash.filter";
import axios from "axios";
import UserLocation from "../Components/UserLocation";

const PharmarcyList = (props) => {
  const { navigation } = props
  const [pharmacies, setPharmacies] = useState(null);
  const [searchPharmacies, setSearchPharmacies] = useState(null);
  const [loading, setLoading] = useState(true)
  const [searchText, setSearchText] = useState("")
  const userLoc = UserLocation()

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
    const endPoint = 'http://192.168.8.124:8000/api/pharmacies';
    try {
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
    if (userLoc) {
      const { longitude, latitude } = userLoc;
      sendRequest(longitude, latitude);
    }
  }, [userLoc]);
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