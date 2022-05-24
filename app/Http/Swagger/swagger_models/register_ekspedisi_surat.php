<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-ekspedisi-surat",
  *      operationId="browseR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Browse R.IN.4 - Register Ekspedisi Surat",
  *      description="Returns list of R.IN.4 - Register Ekspedisi Surat",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-ekspedisi-surat/read?slug=register-ekspedisi-surat&id={id}",
  *      operationId="readR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Get R.IN.4 - Register Ekspedisi Surat based on id",
  *      description="Returns R.IN.4 - Register Ekspedisi Surat based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-ekspedisi-surat/add",
  *      operationId="addR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Insert new R.IN.4 - Register Ekspedisi Surat",
  *      description="Insert new R.IN.4 - Register Ekspedisi Surat into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor surat":"Abc", "tanggal surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "waktu terima":"2021-01-01T00:00:00.000Z", "nama penerima":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-ekspedisi-surat/edit",
  *      operationId="editR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Edit an existing R.IN.4 - Register Ekspedisi Surat",
  *      description="Edit an existing R.IN.4 - Register Ekspedisi Surat",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor surat":"Abc", "tanggal surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "waktu terima":"2021-01-01T00:00:00.000Z", "nama penerima":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-ekspedisi-surat/delete",
  *      operationId="deleteR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Delete one record of R.IN.4 - Register Ekspedisi Surat",
  *      description="Delete one record of R.IN.4 - Register Ekspedisi Surat",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-ekspedisi-surat",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-ekspedisi-surat/delete-multiple",
  *      operationId="deleteMultipleR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Delete multiple record of R.IN.4 - Register Ekspedisi Surat",
  *      description="Delete multiple record of R.IN.4 - Register Ekspedisi Surat",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-ekspedisi-surat",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-ekspedisi-surat/sort",
  *      operationId="sortR.IN.4-RegisterEkspedisiSurat",
  *      tags={"register-ekspedisi-surat"},
  *      summary="Sort existing R.IN.4 - Register Ekspedisi Surat",
  *      description="Sort existing R.IN.4 - Register Ekspedisi Surat",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-ekspedisi-surat",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nomor surat":"Abc", "tanggal surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "waktu terima":"2021-01-01T00:00:00.000Z", "nama penerima":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nomor surat":"Abc", "tanggal surat":"Abc", "kepada":"Abc", "perihal":"Abc", "lampiran":"Abc", "waktu terima":"2021-01-01T00:00:00.000Z", "nama penerima":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nomor surat"), 
  *                         @OA\Property(type="string", property="tanggal surat"), 
  *                         @OA\Property(type="string", property="kepada"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="lampiran"), 
  *                         @OA\Property(type="string", property="waktu terima"), 
  *                         @OA\Property(type="string", property="nama penerima"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */